FROM php:8.2-cli

# Set working directory
WORKDIR /var/www/html

# Copy everything to container
COPY . .

# Expose the port Render expects
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000"]
