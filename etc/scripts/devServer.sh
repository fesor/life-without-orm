function reload() {
    docker-compose exec api rr http:reset
}

fswatch -0 src/ vendor/ worker.php composer.* reload

