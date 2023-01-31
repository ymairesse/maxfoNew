<div
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
                {assign var=nb value=0} {foreach from=$usersList key=acronyme
                item=data} {if $data.mail != 'nomail@nomail.com'}
                <tr>
                  <td>
                    <label class="checkbox-inline">
                      <input
                        type="checkbox"
                        name="cbMail[]"
                        class="cbMail"
                        value="{$acronyme}"
                        checked
                      />{$data.prenom} {$data.nom}
                    </label>
                  </td>
                  <td>
                    <a
                      type="button"
                      class="btn btn-success btn-xs"
                      href="mailto:{$data.mail}"
                      data-toggle="tooltip"
                      data-placement="left"
                      title="Envoyer un mail à {$data.prenom}"
                    >
                      <i class="fa fa-send-o" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                {assign var=nb value=$nb+1} {/if} {/foreach}
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
          Envoyer <span id="nbMails">{$nb}</span> mail(s)
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

<script>
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
</script>
