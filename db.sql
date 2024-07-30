-- Student --

CREATE TABLE student(
    s_name varchar(100) NOT NULL,
    s_date DATE NOT NULL,
    c_name varchar(150) NOT NULL,
    m_number BIGINT NOT NULL,
    dept varchar(150) NOT NULL,
    email varchar(150) NOT NULL,
    ID int auto_increment primary key,
    Title varchar(100) NOT NULL,
    duration int NOT NULL,
    J_date DATE NOT NULL,
    primary key(email) 
);

-- Attendance --

CREATE TABLE attedance(
    email varchar(150) NOT NULL,
    T_date date not null,
    present varchar(15) not null,
    Foreign key(email) references student(email) 
);

