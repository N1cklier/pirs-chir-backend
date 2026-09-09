# ПИРСЧИР

Серверная конфигурация на Docker + LAMP (Linux, Apache, MySQL, PHP). Включает три веб-сервиса на PHP.

**Студент:** Марюнин Никита Викторович  
**Группа:** ИКБО-24-24

## Структура

- `Dockerfile` — сборка образа PHP + Apache
- `compose.yaml` — оркестрация контейнеров
- `drawer.php` — рисование SVG-фигур
- `sort.php` — сортировка Шелла
- `server_info.php` — информация о сервере

## Запуск

```bash
docker compose up -d
```

Открыть в браузере: http://localhost:8080
Drawer: /drawer.php?num=4
Сортировка: /sort.php?arr=5,2,8,1,9,3
Server Info: /server_info.php

## Остановка

```bash
docker compose down
```