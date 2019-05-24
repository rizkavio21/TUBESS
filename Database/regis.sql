CREATE TABLE registrasi(
    username VARCHAR (20) NOT NULL,
    email VARCHAR (50) NOT NULL,
    passwordd VARCHAR(100) NOT NULL,
    confrimed VARCHAR(100) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    tgl int(2) NOT NULL,
    bln VARCHAR(10) NOT NULL,
    tahun int(4) NOT NULL, 
    kota VARCHAR(20) NOT NULL,
    province VARCHAR(10) NOT NULL,
    no_phone int(13) NOT NULL,
    pekerjaan VARCHAR(20) NOT NULL,
    twitter VARCHAR(20) NOT NULL,
    PRIMARY KEY (username)
);
CREATE TABLE partisipasi(
    id INT(2),
    project VARCHAR(50),
    type VARCHAR(12),
    deadline DATE,
    entries VARCHAR(100),
    award VARCHAR(100),
    PRIMARY KEY (id)
);
CREATE TABLE admin(
    username VARCHAR(20),
    password VARCHAR(20)
);


INSERT INTO `partisipasi` (`id`, `project`, `type`, `deadline`, `entries`, `award`) VALUES ('3', 'Lomba Menggambar Fun Cican', 'Blind Contest', '2018-10-05', '44', 'Piala Fun Cican');
INSERT INTO `partisipasi` (`id`, `project`, `type`, `deadline`, `entries`, `award`) VALUES ('4', 'Lomba Desain T-Shirt Hello Motion Academy', 'Blind Contest', '2018-07-23', '155', 'Total 3 Juta Rupiah');
INSERT INTO `partisipasi` (`id`, `project`, `type`, `deadline`, `entries`, `award`) VALUES ('5', 'Lomba Desain Kartu Debit Taplus Muda #TujuanGuaBeda', 'Blind Contest', '2018-05-15', '725', 'Total Hadiah: 95 Juta Rupiah!');
INSERT INTO `partisipasi` (`id`, `project`, `type`, `deadline`, `entries`, `award`) VALUES ('6', 'Lomba Desain Logo ala Ritus Cafe and Resto!', 'Blind Contest', '2018-03-16', '160', 'Total 6 Juta Rupiah');

INSERT INTO `admin` (`username`,`password`) VALUES ('alfath','alfathnov');
INSERT INTO `admin` (`username`,`password`) VALUES ('viosudiro','viosudiro');
