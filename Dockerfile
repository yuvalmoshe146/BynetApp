FROM php:7.4-apache
COPY . .
WORKDIR /app/
EXPOSE 80
CMD ["php" , "hw.php"]
