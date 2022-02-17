from ics import Calendar
import requests
from datetime import datetime
import arrow

url = "https://bedfordfms.sharpschool.net/ICalendarHandler?calendarId=1079243"
c = Calendar(requests.get(url).text)
today  = datetime.today().strftime('%Y-%m-%d')
eventsnow = []

for event in c.events:
  if str(event.begin.date()) == today:
    eventsnow.append(event)

if "A Day" in str(eventsnow):
  print ('It is an "A" Day')
elif "B Day" in str(eventsnow):
 print ('It is a "B" Day')
else:
  print ('There is no school today')