- database description
  * Posts
    + title
    + summary
    + content
    + image
    + show
    + view
    + price
    + promotion_price
    + id_trademark
    + id_distributor
    + place
    + telephone
    + email
    + type
  
=> including
  * blog
    + title
    + summary
    + content
    + image
    + show
    + view
  * product
    + title
    + content
    + price
    + promotion_price
    + id_trademark
    + id_distributor
  * action
    + title
    + content
    + place
    + timetake
  * trademake
    + title
    + content
    + telephone
    + email

- Run project
  + step 1: php artisan migrate
  + step 2: php artisan db:seed


