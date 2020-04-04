function init()
{
    if ($('#googlemapsearch').length) {
        var url = $('#base_url').val();

        const app = new Vue({
            el: '#googlemapsearch',
            data: {
                from: 'SCG บางซื่อ',
                to: 'เซ็นทรัลเวิร์ด',
                mode: 'driving',
                avoid: false
            },
            methods: {
                formSubmit: function(event) {
                    event.preventDefault();
                    var payload = {
                        from: this.from,
                        to: this.to,
                        mode: this.mode,
                        avoid: this.avoid
                    };

                    this.$http.get(url+"google/serach?from="+this.from+"&to="+this.to
                        +"&mode="+this.mode+"&avoid="+this.avoid).then(response => {
                        $('#doscg-google-map').attr('src', response.body);
                        console.log(response.body);
                    }, response => {
                        // error callback
                    });
                }
            }
        });
    }
}