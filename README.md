#вывести все песни с исполнителями и альбомами:
select song, title, name from songs join albums on (albums.id = songs.album_id) join artists on (artists.id = albums.artist_id) order by song;



#все альбомы по жанрам
:select albums.title, genres.title from albums join album_genre on (albums.id = album_id) join genres on (genre_id = genres.id);



#максимальная инфа по песням:
select song, albums.title, year, name, genres.title from songs join albums on (albums.id = songs.album_id) join artists on (artists.id = albums.artist_id) join album_genre on (albums.id = album_genre.album_id) join genres on (album_genre.genre_id = genres.id) order by song;




