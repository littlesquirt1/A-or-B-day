from ics import Calendar
import requests
from datetime import datetime

url = "https://bedfordfms.sharpschool.net/ICalendarHandler?calendarId=1079243"
c = Calendar(requests.get(url).text)
today  = datetime.today().strftime('%Y-%m-%d')

for event in c.events:
  if str(event.begin.date()) == today:
    if event.name == "A Day":
      message = "It is an A Day"
    elif event.name == "B Day":
      message = "It is a B Day"
    else:
      message = "There is no school today"

print (message)

