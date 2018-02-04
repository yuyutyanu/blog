FROM postgres:9.6.5

WORKDIR /app

ENV POSTGRES_DB blogapp
ENV POSTGRES_PASSWORD root
ENV POSTGRES_USER root

EXPOSE 5432:5432