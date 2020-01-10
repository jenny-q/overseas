# Hotel Directory

I created the directory similar to what was provided in the PDF minus some assets/requirements. I maxed out the room type at 3 per hotel. The database was built locally with Xampp/mysql. I originally used docker with doctrine in the beginning of the project, but scrapped it due to issues. You will on this [commit](https://github.com/jenny-q/overseas/commit/085e52cc4f9bc64af19b962d0c9ba7354f00ee9c) as well as this [one](https://github.com/jenny-q/overseas/commit/9052d2d633d9f872ceae8216e6d2878651b30181) that I started over with symfony/skeleton instead of creating a new repository. My windows build is still on Windows 7, so I tried using [Docker Toolbox](https://docs.docker.com/toolbox/toolbox_install_windows/) instead, but none of my containers were running. I ended up just using Xampp for this mockup.

![alt text](https://github.com/jenny-q/overseas/blob/master/wholepage.png "Page View")


The modal appears when you click on request, and it updates the header with the hotel name and room type.
![alt text](https://github.com/jenny-q/overseas/blob/master/modal.png "Modal View")


Since I was running xampp vs. docker, my files were hosted away from my git folder in xampp/htcdocs, so some of my commits look huge due to copying files from one location to another. [These are probably the ones you want to inspect](https://github.com/jenny-q/overseas/commit/07e727c68319c73cbb518680a9d11edfa5b130a8) along with my [custom css](https://github.com/jenny-q/overseas/blob/5068fb382b48374ab6344fc949520959cd6293c6/public/css/hotel.css) and [entity file](https://github.com/jenny-q/overseas/blob/5068fb382b48374ab6344fc949520959cd6293c6/src/Entity/Hotel.php) .


The page was built with bootstrap 4 to try and make it as quickly as possible. There are custom classes to override certain styling. I also implemented a bem system for the hotel list and details. The price tag looks like a gradient, so I tried to match the colors as close as possible.

The database is a table made up of the hotel object, along with name, price, rating, roomA/B/C along with roomPriceA/B/C, and promotion. I have never worked with database creation, so I am sure there is a better way to make roomA/B/C, like roomType, and then be able to loop through the rooms under roomType instead of creating three columns.

