function exit_with_message() {
    message=$1
    echo $message
    exit 1
}

command -v fswatch || exit_with_message "Please install fswatch"
