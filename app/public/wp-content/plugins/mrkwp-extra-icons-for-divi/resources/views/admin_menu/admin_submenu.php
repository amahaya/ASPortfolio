<div class='wrap'>
    <h1>Divi Extra Icons</h1>

<?php if (isset($message)): ?>
    <div class="notice notice-success is-dismissible">
        <p><?php echo $message; ?></p>
    </div>
<?php endif?>

    <form method="POST">
        <?php wp_nonce_field(plugin_basename($this->container['plugin_file']), 'mrkwp-divi-extra-icon-nonce');?>

        <table class="table widefat" id='mrkwp-divi-extra-icon-settings'>
            <tbody>
                <tr>
                    <td>Load FontAwesome via CDN</td>
                    <td><input type="checkbox" name="mrkwp-divi-extra-icons-cdn-enabled" <?php if ($checked) {echo 'checked';}?>></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Save" class='button button-primary'></td>
                </tr>
            </tbody>
        </table>
    </form>

    <style type="text/css">
        #mrkwp-divi-extra-icon-settings tbody tr td:first-child{
            width: 250px;
        }
    </style>
</div>
