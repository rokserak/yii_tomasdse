CREATE TABLE tom_project ( id INTEGER NOT NULL, name TEXT, PRIMARY KEY (id) );
insert into tom_project (id, name) values (1, 'Projekt');
insert into tom_project (id, name) values (2, 'Projekt 2');
insert into tom_project (id, name) values (3, 'Projekt 3');

CREATE TABLE tom_task ( id INTEGER NOT NULL, project_id INTEGER NOT NULL, name TEXT NOT NULL, start_date TIMESTAMP(6) WITHOUT TIME ZONE NOT NULL, end_date TIMESTAMP(6) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY (id) );
insert into tom_task (id, project_id, name, start_date, end_date) values (1, 1, 'Naloga 1', '2014-05-23 00:00:00', '2014-05-25 23:00:00');
insert into tom_task (id, project_id, name, start_date, end_date) values (2, 1, 'Naloga 2', '2014-05-23 00:00:00', '2014-06-23 23:00:00');
insert into tom_task (id, project_id, name, start_date, end_date) values (3, 1, 'Naloga 3', '2014-05-23 00:00:00', '2014-05-26 23:00:00');
insert into tom_task (id, project_id, name, start_date, end_date) values (4, 2, 'Naloga 1', '2014-05-23 00:00:00', '2014-06-23 23:00:00');
insert into tom_task (id, project_id, name, start_date, end_date) values (5, 3, 'Naloga 1', '2014-05-23 00:00:00', '2014-05-23 23:00:00');

CREATE TABLE tom_report ( id INTEGER NOT NULL, task_id INTEGER NOT NULL, name TEXT NOT NULL, percent_done INTEGER NOT NULL, PRIMARY KEY (id) );
insert into tom_report (id, task_id, name, percent_done) values (1, 1, 'Porocilo 1', 100);
insert into tom_report (id, task_id, name, percent_done) values (2, 2, 'Porocilo 2', 30);
insert into tom_report (id, task_id, name, percent_done) values (3, 2, 'Porocilo 3', 20);
insert into tom_report (id, task_id, name, percent_done) values (4, 5, 'Porocilo 1', 100);
insert into tom_report (id, task_id, name, percent_done) values (5, 4, 'Porocilo 1', 100);
