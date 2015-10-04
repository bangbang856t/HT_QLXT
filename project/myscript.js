$(document).ready(function(){
    $('#imanganh1').keyup(function(e){
        var gtri_manganh = $('#imanganh1').val();
        $.ajax({
            'type':'post',
            'url': 'data_select.php',
            'data': 'ma_nganh='+gtri_manganh,
            'sync': true,
            'success': function(ketqua){
                var tmp = JSON.parse(ketqua);
                var str_dta = '<select>';
                $.each(tmp,function(k,v){
                    str_dta = str_dta.concat('<option value="'+v["ma_nganh"]+'">'+v["thmt"]+'</option>');
                });
                str_dta.concat('</select>');
                $('#nganh1').append(str_dta);
                $(document).on('change','#nganh1 select', function(){
                    var so_bd = $('#sobd').val();
                    var id_thmt = $('#nganh1 select option:selected').val();
                    
                    $.ajax({
                        'type':'get',
                        'url': 'data_diemthi.php',
                        'data': 'sbd='+so_bd+'&thmt='+id_thmt,
                        'sync': true,
                        'success': function(diemthi){
                            var dt = JSON.parse(diemthi);
                            $('#idiemmon1nganh1').val(dt[0]['dm1']);
                            $('#idiemmon2nganh1').val(dt[0]['dm2']);
                            $('#idiemmon3nganh1').val(dt[0]['dm3']);                            
                        }
                    }); 
                    
                });
            }
        }); 
        
    });
})