FROM python:3.10.14-bookworm


RUN mkdir /code
WORKDIR /code
RUN apt-get update \
    && apt-get -y install libpq-dev gcc libgdal-dev vim
RUN pip install --upgrade pip
COPY requirements.txt /code/

RUN pip install -r requirements.txt
COPY . /code/

EXPOSE 8000

CMD ["python", "backend/manage.py", "runserver", "0.0.0.0:8000"]