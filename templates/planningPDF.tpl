<style type="text/css">

table {
    border-collapse: collapse;
 }
th, td {
    border: 2px solid #555;
 }

 th {
    font-weight: bold;
    padding: 10px; 
 }

.benevole {
    margin: 0em;
    padding: 0;
}

.conge {
    background-color: #ccc;
}

.me {
    // background-color: red;
}

p.benevole {
    padding: 5px 10px;
    margin: 0;
    font-size: 10pt;
}

h1 {
    text-align:center;
}

p.caisse {
    font-size: 16pt;
    font-weight: bold;
    color: red;
    text-align: center;
}

p.encadre {
    text-decoration: underline;
    text-decoration-style: double;
}

.selected {
    font-weight: bold;
    font-size: 12pt;
    text-decoration: underline overline
}

#logo {
    width: 150px;
    float: left;
}

.check {
    height: 12px;
}

</style>

<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="20mm">

<img src="../images/oxfam.png" id="logo">
<h1>Planning {$monthName} {$year}</h1>

<p>Version du <strong>{$ceJour}</strong> généré par <strong>{$identite.prenom} {$identite.nom}</strong> </p>

<p class="caisse">Prévoir d’arriver à 9h45 pour compter la caisse<br>porte fermée à clé</p>

<table>

    <tr>
        <th>&nbsp;</th>
        {foreach from=$listePeriodes key=noPeriode item=$periode}
            <th data-periode="{$noPeriode}" style="text-align:center;">
            {$periode.debut} - {$periode.fin}
            </th>
        {/foreach}
    </tr>

    {foreach from=$calendar key=laDate item=dataJournee}

    {assign var=numJourSemaine value=$dataJournee.day.dayOfWeek}
    <tr>

        <td style="font-size:12pt; text-align:center;">

            <span>{$dataJournee.day.fr}</span>
        
        </td>

        {foreach from=$dataJournee.periodes key=periode item=dateHeure}
            
            {assign var=benevoles value=$dataJournee.periodes.$periode|array_keys}
            
            <td class="case {if (isset($listeConges.feries.$laDate.$periode)) || (isset($listeConges.hebdo.$numJourSemaine.$periode))}conge{/if}">

                    {foreach from=$benevoles item=unAcronyme}

                        {assign var=benevole value=$usersList.$unAcronyme}

                        <p class="benevole{if $unAcronyme == $acronyme} me {/if}
                            {if $calendar.$laDate.periodes.$periode.$unAcronyme.confirme == 1} selected {else} unselected {/if}">
                            {$benevole.prenom} {$benevole.nom|truncate:2:'.'} 
                            {if $calendar.$laDate.periodes.$periode.$unAcronyme.confirme == 1}
                                <img class="check" src='../images/check.png' alt='check'>
                            {/if}
                        </p>

                    {/foreach}
 
            </td>
        {/foreach}

    </tr>

    {/foreach}

    <tr>
        <th style="width:10%">&nbsp;</th>
        {foreach from=$listePeriodes key=noPeriode item=$periode}
            <th data-periode="{$noPeriode}" style="width:30%; text-align:center;">
            {$periode.debut} - {$periode.fin}
            </th>
        {/foreach}
    </tr>

</table>

    <page_footer> 
         Prévoir d’arriver à 9 h 45 pour compter la caisse porte fermée à clé
    </page_footer> 

</page>
