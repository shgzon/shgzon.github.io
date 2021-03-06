  <?php include 'includes/header.html'; ?>
     <section>
        <h1>
        <a id="setting-up-a-repository" class="anchor" href="#setting-up-a-repository" aria-hidden="true"><span class="octicon octicon-link"></span></a>git</h1>
        <hr>
        <h2>
        <a id="create-repository" class="anchor" href="#create-repository" aria-hidden="true"><span class="octicon octicon-link"></span></a>Een repository aanmaken</h2>
        <h3>
        <a id="git-init" class="anchor" href="#git-init" aria-hidden="true"><span class="octicon octicon-link"></span></a>git init</h3>
        <p>De git init commando maakt een nieuwe Git repository aan. Het kan gebruikt worden om een project om te zetten naar een bestaand repository of een lege nieuwe repository. Dit is meestal de eerste commando.</p>
        <p>Het uitvoeren van git init maakt een .git subdirectory aan in de project root, die alle nodige meta data bevat voor de repo. </p>
        <h3>
        <a id="usage" class="anchor" href="#usage" aria-hidden="true"><span class="octicon octicon-link"></span></a>Usage</h3>
        <p><code>$ git init</code></p>
        <p>Transformeer de huidige directory in een Git repository. Hiermee voeg je een .git folder toe aan de huidige directory en dit maakt het mogelijk om herzieningen op te nemen. </p>
        <p><code>$ git init &lt;directory&gt;</code></p>
        <p>Maak een lege Git repository in een specifieke directory. Zodra je deze commando uitvoert zal dit een nieuwe folder genoemd  aanmaken.</p>
        <p><code>$ git init --bare &lt;directory&gt;</code></p>
        <hr>
        <h3>
        <a id="git-clone" class="anchor" href="#git-clone" aria-hidden="true"><span class="octicon octicon-link"></span></a>git clone</h3>
        <p>De git clone commando kopieert een bestaande Git repository. De Git repository wordt hiermee een werkende kopie - het heeft zijn eigen geschiedenis, het beheer van zijn eigen bestanden, en zijn 
        volledig geisoleerde omgeving.</p>
        <p>Voor het gemak, automatisch klonen zorgt voor een verbinding wat “origin pointing” genoemd wordt en wijst terug naar de oorsprongelijke repository. </p>
        <h3>
        <a id="usage-1" class="anchor" href="#usage-1" aria-hidden="true"><span class="octicon octicon-link"></span></a>Usage</h3>
        <p><code>$ git clone &lt;repo&gt;</code></p>
        <p>Clone de repository die zich bevindt in  in de folder genoemd .</p>
        <p><code>git clone &lt;repo&gt; &lt;directory&gt;</code></p>
        <hr>
        <h3>
        <a id="git-config" class="anchor" href="#git-config" aria-hidden="true"><span class="octicon octicon-link"></span></a>git config</h3>
        <p>De git config commando laat je de Git installatie configureren. De commando bevat alles van gebruikersinformatie tot voorkeuren tot het gedrag van je repository.</p>
        <h3>
        <a id="usage-2" class="anchor" href="#usage-2" aria-hidden="true"><span class="octicon octicon-link"></span></a>Usage</h3>
        <p>Definieer de naam van de auteur voor alle veranderingen in de huidige repository. Meestal zul je --global flag gebruiken om configuratie opties in te stellen voor de huidige gebruiker.</p>
        <p><code>$ git config --global user.name &lt;name&gt;</code></p>
        <p>Definieer de teksteditor gebruikt door commando’s zoals git commit voor de huidige gebruiker. Het  bevat de commando die de editor start.</p>
        <p><code>git config --system core.editor &lt;editor&gt;</code>
        <code>git config --global --edit</code></p>
        <hr>
        <h2>
        <a id="save-changes" class="anchor" href="#save-changes" aria-hidden="true"><span class="octicon octicon-link"></span></a>Wijzigingen opslaan</h2>
        <hr>
        <h3>
        <a id="git-add" class="anchor" href="#git-add" aria-hidden="true"><span class="octicon octicon-link"></span></a>git add</h3>
        <p>De git add commando voegt een wijziging toe in de bestaande 
        directory in de verzamelplaats. Verandering zijn daadwerkelijk pas doorgevoert als je daarna git commit uitvoert.</p>
        <p>Met betrekking tot deze commando’s, zul je git status ook nodig hebben om de status van de werkende directory en de verzamelplaats te bekijken.</p>
        <h3>
        <a id="usage-3" class="anchor" href="#usage-3" aria-hidden="true"><span class="octicon octicon-link"></span></a>Usage</h3>
        <p><code>git add &lt;file&gt;</code></p>
        <hr>

        <h3>
        <a id="git-commit" class="anchor" href="#git-commit" aria-hidden="true"><span class="octicon octicon-link"></span></a>git commit</h3>

        <p>De git commit commando commits de snapshot naar de project geschiedenis. Snapshots worden committed naar de local repository, en vereist geen enkele interacite met andere Git repositories.</p>

        <h3>
          <a id="usage-4" class="anchor" href="#usage-4" aria-hidden="true"><span class="octicon octicon-link"></span></a>Usage
        </h3>

        <p><code>git commit</code></p>
        <p>Dit zal een texteditor opstarten die je vraagt om een commit bericht. Save het bestand nadat je het bericht hebt ingevuld, en sluit de editor om de daadwerkelijke commit te creeren. </p>
        <p>Commit de staged snapshot, maar in plaats van een texteditor op te laten start kun je  gebruiken als een commit bericht.</p>
        <p><code>git commit -a</code></p>
        <hr>
      </section>
<?php include 'includes/header.html'; ?>