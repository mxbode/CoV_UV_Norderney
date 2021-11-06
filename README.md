# CoV_UVI Germany
a diagram showing the relationship between corona numbers in germany and the daily uv index avg of following german citys

* Norderney
* Weißenburg (Mittelfranken)
* Belm/Osnabrück
* Schauinsland
* Fichtelberg /Oberwiesenthal
* Dortmund
* Waldmünchen (Bayerischer Wald)
* Westerland-Sylt
* Zirchow


# Diagram
![Diagram Image](https://github.com/mxbode/CoV_UV_Norderney/blob/main/img/image.png?raw=true)

# Merge Data Sources

`cd corona_data; php extract_germany.php`

to export corona cases/deaths data to an easy csv file

`SELECT date, avg(uvi) FROM 'uvi' group BY 'date' order by date;`

to export an avg value for all UV-Index data

# Sources of Data / Datenquellen
[Johns Hopkings](https://data.humdata.org/dataset/novel-coronavirus-2019-ncov-cases)
[Bundesamt für Strahlenschutz](https://www.imis.bfs.de/geoportal/)
