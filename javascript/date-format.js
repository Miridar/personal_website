function formatDate(date) {
    var d = new Date(date);
    var formattedDate = d.getDate() + '. ' + (d.getMonth()+1) + '. ' + d.getFullYear();
    return formattedDate;
}