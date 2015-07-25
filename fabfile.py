import json
import requests

from fabric.api import *
from fabric.operations import local

def update_event_data():
    
    resp = requests.get('https://go.berniesanders.com/page/event/search_results?format=json&wrap=no&orderby[0]=date&orderby[1]=desc&event_type=13&mime=text/json&limit=4000&country=*')
    print "Request complete."
    
    data = json.loads(resp.text)
    print "JSON loaded."

    global rsvp_count
    rsvp_count = 0

    def clean_result(row):
        global rsvp_count
        for key in ['description', 'closed_msg', 'distance', 'url']:
            if key in row:
                del row[key]

        location_fields = filter(lambda x: x in row, ['venue_name', 'venue_addr1', 'venue_city', 'venue_state_cd', 'venue_zip'])
        row['location'] = " ".join(row[key] for key in location_fields)
        
        for key in ['venue_name', 'venue_addr1', 'venue_city', 'venue_state_cd']:
            if key in row:
                del row[key]

        # not sure we need these?
        for key in ['type_id', 'timezone', 'is_official', 'event_type_name']:
            if key in row:
                del row[key]

        rsvp_count += row['attendee_count']
        return row


    data_out = {'results': map(clean_result, data['results'])}

    print "JSON cleaned! %s events." % len(data['results'])

    data['settings']['rsvp'] = rsvp_count

    data_out['settings'] = data['settings']    

    json_dump = json.dumps(data)
    json_dump = "window.JULY_29_EVENT_DATA = " + json_dump

    print "Writing data..."

    outfile = open('js/bern-july-29-data.js', 'w')
    outfile.write(json_dump)
    outfile.close()

    print "Done!"

def deploy():
    # update_pco_data()
    local("aws s3 cp . s3://bernie2016events/ --recursive --exclude \"fabfile.py*\" --exclude \".git*\" --exclude \"*.sublime-*\" --exclude \".DS_Store\"")
