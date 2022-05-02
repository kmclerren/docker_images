FROM python:3.8-slim-buster

COPY . /local
WORKDIR /local

RUN apt-get update && cat requirements.0.txt | xargs apt-get install -y
RUN mkdir /opt/ntc-templates && \
    git clone https://github.com/networktocode/ntc-templates.git /opt/ntc-templates

RUN pip install --no-cache -r requirements.1.txt
RUN ansible-galaxy collection install -r requirements.yml
