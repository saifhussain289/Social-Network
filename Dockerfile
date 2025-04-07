FROM php:8.1-cli

# Set working directory
WORKDIR /var/www/html

# Copy all files into the container
COPY . .

# Start PHP built-in server on port 10000 (Render requirement)
CMD ["php", "-S", "0.0.0.0:10000"]
