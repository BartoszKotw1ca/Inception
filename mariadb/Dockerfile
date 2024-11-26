# Use Alpine as the base image
FROM alpine:3.20

WORKDIR /app

# Copy the main shell script to image
COPY ["setup.sh", "/app"]

RUN \
    # Add MariaDB packages
    apk add --no-cache \
        mariadb \
        mariadb-client; \
    # Give execute permission to main.sh
    chmod +x /app/setup.sh

# Specify the start point of our image
ENTRYPOINT ["/app/setup.sh"]
