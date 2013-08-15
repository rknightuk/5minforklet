#5 Minute Fork Bookmarklet

A bookmarklet for Remy Sharp's [5 Minute Fork](http://5minfork.com) service.

##Usage

Easy: Drag [this link](javascript:(function()%7Bif(document.URL.indexOf(%22https://github.com%22)%3E%3D0)%7Bwindow.location.href%3Dwindow.location.href.replace(%22https://github.com%22,%22http://5minfork.com%22)%3B%7Delse%7Balert(%22Not%20a%20valid%20GitHub%20repo%22)%3B%7D%7D)()%3B) to your bookmarks bar.

Javascript converted to bookmarklet format with the [bookmarkleter](http://chris.zarate.org/bookmarkleter).