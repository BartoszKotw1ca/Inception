FROM alpine:latest

RUN apk update && apk add --no-cache python3 py3-pip

WORKDIR /app

COPY requirements.txt .

RUN pip3 install --no-cache-dir --break-system-packages -r requirements.txt

COPY tmp.py .

CMD ["python3", "tmp.py"]
