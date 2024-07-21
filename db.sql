-- login --

CREATE TABLE login(
    username varchar(100) not null,
    passwrd varchar(255) not null
    );


-- Student --

CREATE TABLE student(
    s_name varchar(100) NOT NULL,
    s_date DATE NOT NULL,
    c_name varchar(150) NOT NULL,
    m_number BIGINT NOT NULL,
    dept varchar(150) NOT NULL,
    email varchar(150) NOT NULL,
    primary key(email)
);

-- Project --

CREATE TABLE project(
    ID int auto_increment primary key,
    topic varchar(100) NOT NULL,
    p_type varchar(50) NOT NULL,
    p_cost int NOT NULL,
    ini_pay int NOT NULL,
    p_method varchar(50) NOT NULL,
    on_date DATE NOT NULL,
    l_date DATE NOT NULL,
    email varchar(150) NOT NULL,
    Foreign key(email) references student(email) 
);

-- members --

-- CREATE TABLE members(
--     ID int auto_increment,
--     m_1 varchar(100),
--     m_2 varchar(100),
--     m_3 varchar(100),
--     m_4 varchar(100),
--     m_5 varchar(100),
--     m_6 varchar(100),
--     Foreign key(ID) references project(ID) 
-- );