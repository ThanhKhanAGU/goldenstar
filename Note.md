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
  * blog:ps
    + title
    + summary
    + content
    + image
    + show
    + view
  * product:pr
    + title
    + content
    + price
    + promotion_price
    + id_trademark
    + id_distributor
    + img
  * action: ac
    + title
    + content
    + img
    + place
    + timetake
  * trademake:tr
    + title
    + content
    + img
    + telephone
    + email
   * distributor:di
    + title
    + content
    + img
    + telephone
    + email
    + place

- Run project
  + step 1: php artisan migrate
  + step 2: php artisan db:seed


