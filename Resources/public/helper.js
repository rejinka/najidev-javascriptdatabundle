(function( jsd, $, undefined ) {
    var data;

    jsd.get = function(key)
    {
        if (undefined == data)
            data = JSON.parse(document.getElementById('javascript_data').innerHTML);

        return _get(key, data);
    };

    function _get(key, data)
    {
        key = key.split('.');

        if (1 == key.length)
        {
            return data[key[0]];
        }
        else
        {
            var first = key.shift();

            if (undefined == data[first])
                return undefined;

            return _get(key.join('.'), data[first]);
        }
    }
}( window.jsd = window.jsd || {}, jQuery ));