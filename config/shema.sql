/* ===============================
   DATABASE
   =============================== */
CREATE DATABASE IF NOT EXISTS youcodearena
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE youcodearena;

/* ===============================
   USERS
   =============================== */
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'organizer', 'user') NOT NULL,
    avatar_url VARCHAR(255),
    bio TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE (email),
    UNIQUE (username)
) ENGINE=InnoDB;

/* ===============================
   TOURNAMENTS
   =============================== */
CREATE TABLE tournaments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    organizer_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    game_name VARCHAR(50) NOT NULL,
    description TEXT,
    start_date DATETIME NOT NULL,
    max_players INT NOT NULL,
    current_round INT,
    status ENUM('open', 'closed', 'in_progress', 'finished') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_tournaments_organizer
        FOREIGN KEY (organizer_id)
        REFERENCES users(id)
        ON DELETE CASCADE
) ENGINE=InnoDB;

/* ===============================
   REGISTRATIONS
   =============================== */
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    tournament_id INT NOT NULL,
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('approved', 'rejected', 'pending') NOT NULL,

    CONSTRAINT fk_registrations_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_registrations_tournament
        FOREIGN KEY (tournament_id)
        REFERENCES tournaments(id)
        ON DELETE CASCADE,

    UNIQUE (user_id, tournament_id)
) ENGINE=InnoDB;

/* ===============================
   POSTS
   =============================== */
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author_id INT NOT NULL,
    tournament_id INT,
    content TEXT NOT NULL,
    image_url VARCHAR(255),
    likes_count INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_posts_author
        FOREIGN KEY (author_id)
        REFERENCES users(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_posts_tournament
        FOREIGN KEY (tournament_id)
        REFERENCES tournaments(id)
        ON DELETE SET NULL
) ENGINE=InnoDB;

/* ===============================
   COMMENTS
   =============================== */
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    author_id INT NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_comments_post
        FOREIGN KEY (post_id)
        REFERENCES posts(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_comments_author
        FOREIGN KEY (author_id)
        REFERENCES users(id)
        ON DELETE CASCADE
) ENGINE=InnoDB;

/* ===============================
   MATCHES
   =============================== */
CREATE TABLE matches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tournament_id INT NOT NULL,
    round INT NOT NULL,
    player1_id INT NOT NULL,
    player2_id INT NOT NULL,
    winner_id INT,
    score_p1 INT,
    score_p2 INT,
    status ENUM('scheduled', 'in_progress', 'completed') NOT NULL,
    match_date DATETIME,

    CONSTRAINT fk_matches_tournament
        FOREIGN KEY (tournament_id)
        REFERENCES tournaments(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_matches_player1
        FOREIGN KEY (player1_id)
        REFERENCES users(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_matches_player2
        FOREIGN KEY (player2_id)
        REFERENCES users(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_matches_winner
        FOREIGN KEY (winner_id)
        REFERENCES users(id)
        ON DELETE SET NULL
) ENGINE=InnoDB;

/* ===============================
   NOTIFICATIONS
   =============================== */
CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    message VARCHAR(255) NOT NULL,
    link VARCHAR(255),
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_notifications_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE
) ENGINE=InnoDB;
