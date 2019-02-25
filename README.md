# APIS
Project idea:
Matching between many APIs to get new web site do new functions. We use First
API about Books:
https://www.googleapis.com/books/v1/volumes?q=isbn:0747532699 We used
Get service, It show the book description, this description contains where this
book was published, book’s type (criminal, drama,...), who wrote this book and
the language of this book and contain many hashtags (this is the main idea) like
country, year and many known words. When you click on this hashtags will move
to another API.
The running Scenario:
You add the film name and from the first API
https://www.googleapis.com/books/v1/volumes?q=isbn:0747532699 you will see
the description which contain many hashtags for country, year, actors, movies,….
If you click on country will go to another API https://newsapi.org/v2/topheadlines?
country=eg&apiKey=c9edad53a37441f5be8bf97359b466d2 and show
news about this country and if you click on year will go to another API
https://api.hillbillysoftware.com/Awards/ByYear/1997 and show the awards that
achieved in this year and if you click on actor will go to another API
https://api.hillbillysoftware.com/Cast/ActorBySearch/c19edc4eed084cfebdbf713
512afdc2e/Daniel%20Radcliff and show information for this actor and if you click
on movies will go to another API
https://api.themoviedb.org/3/movie/76341?api_key=0c60965b2e298aee9f4813b
db7d8a78a&language=en and show information for this movies
