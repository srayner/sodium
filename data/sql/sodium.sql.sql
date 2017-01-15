--
-- Database: `sodium`
--

-- --------------------------------------------------------

-- Author table.
CREATE TABLE author (
    id int(11)                    NOT NULL AUTO_INCREMENT,
    fullname         varchar(64)  NOT NULL,
    avatar           varchar(255)     NULL,
    email            varchar(255)     NULL,
    profile          text             NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4;

-- Template table.
CREATE TABLE template (
    id               int(11)      NOT NULL AUTO_INCREMENT,
    filename         varchar(255) NOT NULL,
    display_name     varchar(64)  NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4;

-- Placeholder table.
CREATE TABLE placeholder (
    id               int(11)      NOT NULL AUTO_INCREMENT,
    template_id      int(11)      NOT NULL,
    placeholder_name varchar(64)  NOT NULL,
    width            int(11)      NOT NULL,
    height           int(11)      NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4;

-- Media table.
CREATE TABLE media (
    id int(11)                     NOT NULL AUTO_INCREMENT,
    url_path          varchar(255) NOT NULL,
    mime_type         varchar(32)  NOT NULL,    
    placeholder_name  varchar(64)  NOT NULL,    
    alt_tag           varchar(255)     NULL,
    width             int(11)      NOT NULL,
    height            int(11)      NOT NULL,
    internal_filename varchar(64)  NOT NULL,
    file_size         int(11)      NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4;

-- Content table.
CREATE TABLE content (
  id               int(11)      NOT NULL AUTO_INCREMENT,
  content_type     varchar(16)  NOT NULL,
  url_path         varchar(256) NOT NULL,
  title            varchar(128) NOT NULL,
  excerpt          text             NULL,
  body             text             NULL,
  meta_title       varchar(128)     NULL,
  meta_description text             NULL,
  meta_tags        varchar(256)     NULL,
  author_id        int(11)          NULL,
  parent_id        int(11)          NULL,
  template_id      int(11)      NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Category table
CREATE TABLE category (
    id            int(11)      NOT NULL AUTO_INCREMENT,
    category_name varchar(128) NOT NULL,
    description   text             NULL,
    parent_id     int(11)          NULL,
    media_id      int(11)          NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4;

