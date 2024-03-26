<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zoo de Fou</title>
<style>
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Inter', sans-serif;
}

.container {
  position: relative;
  background: #005B3A;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.milieu {
  position: absolute;
  width: 1024px;
  height: 578px;
  top: 60px;
}

.rectangle {
  position: absolute;
  border-radius: 20px;
}

.group {
  position: absolute;
  background: #DFFFE4;
  border-radius: 20px;
}

.animaux, .animations, .reservations, .rechercher, .activites, .emblematic, .voir-plus, .je-reserve, .propos-nous, .follow-us {
  text-align: center;
  color: #005134;
  font-weight: 500;
  word-wrap: break-word;
}

.animaux, .animations, .reservations {
  font-size: 20px;
  text-transform: uppercase;
}

.bienvenue, .description {
  color: black;
  word-wrap: break-word;
}

.bienvenue {
  font-size: 12px;
}

.description {
  font-size: 14px;
  line
