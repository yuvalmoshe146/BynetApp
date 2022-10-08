FROM php:7.4-apache
WORKDIR /app/
COPY . .
EXPOSE 80
CMD ["php" , "hw.php"]
