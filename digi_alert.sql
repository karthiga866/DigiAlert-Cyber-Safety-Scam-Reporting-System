CREATE DATABASE IF NOT EXISTS digi_alert;

USE digi_alert;

CREATE TABLE reports (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  scam_type VARCHAR(100),
  description TEXT,
  reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
