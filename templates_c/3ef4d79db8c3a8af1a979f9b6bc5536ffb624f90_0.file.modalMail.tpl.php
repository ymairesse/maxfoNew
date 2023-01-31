<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 19:47:37
  from '/home/yves/www/mdm/templates/modal/modalMail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d96249d73604_27444293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef4d79db8c3a8af1a979f9b6bc5536ffb624f90' => 
    array (
      0 => '/home/yves/www/mdm/templates/modal/modalMail.tpl',
      1 => 1675190845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d96249d73604_27444293 (Smarty_Internal_Template $_smarty_tpl) {
?><div
  class="modal fade"
  id="modalMail"
  data-backdrop="static"
  data-keyboard="false"
  tabindex="-1"
  aria-labelledby="modalMail"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMailLabel">Envoi de mail(s)</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formMail">
          <div class="col-xs-4" style="max-height: 30em; overflow: auto">
            <table class="table table-condensed tableCb">
              <thead>
                <tr colspan="2">
                  <th>
                    <label for="cbMailAll" 
                      class="checkbox-inline"
                      title="Clic pour cocher/décocher tout"
                      data-toggle="tooltip"
                      data-placement="bottom"
                      >
                      <input
                      type="checkbox"
                      id="cbMailAll"
                      checked
                    />
                    Sélectionner/Désélectionner
                    </label>
                </th>
                </tr>
              </thead>
              <tbody>
                <?php $_smarty_tpl->_assignInScope('nb', 0);?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usersList']->value, 'data', false, 'acronyme');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acronyme']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?> <?php if ($_smarty_tpl->tpl_vars['data']->value['mail'] != 'nomail@nomail.com') {?>
                <tr>
                  <td>
                    <label class="checkbox-inline">
                      <input
                        type="checkbox"
                        name="cbMail[]"
                        class="cbMail"
                        value="<?php echo $_smarty_tpl->tpl_vars['acronyme']->value;?>
"
                        checked
                      /><?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>

                    </label>
                  </td>
                  <td>
                    <a
                      type="button"
                      class="btn btn-success btn-xs"
                      href="mailto:<?php echo $_smarty_tpl->tpl_vars['data']->value['mail'];?>
"
                      data-toggle="tooltip"
                      data-placement="left"
                      title="Envoyer un mail à <?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
"
                    >
                      <i class="fa fa-send-o" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                <?php $_smarty_tpl->_assignInScope('nb', $_smarty_tpl->tpl_vars['nb']->value+1);?> <?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>
          </div>
          <div class="col-xs-8">
            <div class="form-group">
              <label for="sujet">Sujet</label>
              <input
                type="text"
                class="form-control"
                name="sujet"
                id="sujet"
                value=""
                placeholder="Sujet de votre mail"
              />
            </div>

            <div class="form-group">
              <label for="texteMail">Votre texte</label>
              <textarea
                class="form-control"
                name="texteMail"
                id="texteMail"
                rows="10"
              ></textarea>
            </div>
          </div>

          <div class="clearfix"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn-sendMail">
          Envoyer <span id="nbMails"><?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</span> mail(s)
        </button>
      </div>
    </div>
  </div>
</div>

<style>
  .error {
    color: red;
  }
</style>

<?php echo '<script'; ?>
>
  $(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    $("#texteMail").summernote({
      lang: "fr-FR", // default: 'en-US'
      height: 250, // set editor height
      minHeight: 150, // set minimum height of editor
      focus: true, // set focus to editable area after initializing summernote
      toolbar: [
        ["font", ["bold", "underline", "clear"]],
        ["font", ["strikethrough"]],
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["table", ["table"]],
        ["insert", ["link", "picture"]],
        ["view", ["fullscreen", "codeview"]],
      ],
      maximumImageFileSize: 2097152,
      dialogsInBody: true,
    });

    $("#cbMailAll").change(function () {
      var nb = 0;
      $(".cbMail").each(function () {
        $(this).prop("checked", !$(this).prop("checked"));
        if ($(this).prop("checked") == true) nb++;
      });
      $("#nbMails").text(nb);
    });

    $(".cbMail").change(function () {
      var nb = parseInt($("#nbMails").text());
      if ($(this).prop("checked") == true) nb++;
      else nb--;
      $("#nbMails").text(nb);
    });

    $("#formMail").validate({
      rules: {
        sujet: {
          required: true,
        },
        "cbMail[]": {
          required: true,
          minlength: 1,
        },
        texteMail: {
          required: true,
          minlength: 50
        },
      },
      messages: {
        "cbMail[]": "Au moins un·e destinataire",
      },
      errorPlacement: function (error, element) {
        if (element.hasClass("cbMail")) {
          error.prependTo(".col-xs-4");
        } else error.insertAfter(element);
      },
    });
  });
<?php echo '</script'; ?>
>
<?php }
}
