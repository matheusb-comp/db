<?php
// Based on: https://github.com/arxeiss/Adminer-FillLoginForm
// Add this file as /var/www/html/plugins-enabled/fill-login-form.php
class FillLoginForm {
  function loginForm() {
    ?>
        <script<?php echo nonce(); ?>>
        document.addEventListener("DOMContentLoaded", function(event) {
        var dr = qs("option[value='<?php echo $this->system; ?>']");
        if(dr){ dr.selected = true; }

        <?php if(!empty($_ENV['ADMINER_DEFAULT_DRIVER'])){ ?>
            var t = qs("select[name='auth[driver]']");
            if(t && t.value != "<?php echo $_ENV['ADMINER_DEFAULT_DRIVER'] ?>"){
                t.value = "<?php echo $_ENV['ADMINER_DEFAULT_DRIVER'] ?>";
            }
        <?php }

        if(!empty($_ENV['ADMINER_DEFAULT_SERVER'])){ ?>
            var s = qs("input[name='auth[server]']");
            if(s && s.value.trim() == ""){
                s.value = "<?php echo $_ENV['ADMINER_DEFAULT_SERVER'] ?>";
            }
        <?php }

        if(!empty($_ENV['ADMINER_DEFAULT_USER'])){ ?>
            var l = qs("input[name='auth[username]']");
            if(l && l.value.trim() == ""){
                l.value = "<?php echo $_ENV['ADMINER_DEFAULT_USER'] ?>";
            }
        <?php }

        if(!empty($_ENV['ADMINER_DEFAULT_PASSWORD'])){ ?>
            var p = qs("input[name='auth[password]']");
            if(p && p.value.trim() == ""){
                p.value = "<?php echo $_ENV['ADMINER_DEFAULT_PASSWORD'] ?>";
            }
        <?php }

        if(!empty($_ENV['ADMINER_DEFAULT_DATABASE'])){ ?>
            var d = qs("input[name='auth[db]']");
            if(d && d.value.trim() == ""){
                d.value = "<?php echo $_ENV['ADMINER_DEFAULT_DATABASE'] ?>";
            }
        <?php } ?>
        });
        </script>

    <?php
    }
}

return new FillLoginForm();
