<?php
$db = new SQLite3('digi_alert.db');
$db->exec("CREATE TABLE IF NOT EXISTS reports (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT,
  email TEXT,
  scam_type TEXT,
  description TEXT,
  reported_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");
?>
