function change_house_information(alt_type, text, alt_price, price) {
    $(alt_type).text(text);
    $(alt_price).text(price);
}
$('#carousel-nha-mau').on('slide.bs.carousel', function(e) {
    var currentIndex = $(e.relatedTarget).index();
    var html = $.parseHTML($(e.relatedTarget).html());
    var alt = $(html).find("img").attr("alt");
    switch (alt) {
        case 'biet-thu':
            change_house_information(".kieu-nha", "Nhà Biệt Thự Phố", ".gia", "2.720.238.000 VNĐ");
            break;
        case 'nha-ke':
            change_house_information(".kieu-nha", "Nhà Phố Liền Kề", ".gia", "1.905.009.000 VNĐ");
            break;
    }
});