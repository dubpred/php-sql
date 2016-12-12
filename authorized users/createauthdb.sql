create table authorized_users ( name varchar(20), 
                                password varchar(40),
                                        primary key     (name)
                              );
insert into authorized_users values ( 'username', 
                                      'password' );

insert into authorized_users values ( 'etest', 
                                      sha1('password') );
