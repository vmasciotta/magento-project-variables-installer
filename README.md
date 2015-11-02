#Magento Project Variables Installer

Questo piccolo modulo è stato pensato per installare le variabili necessarie nei propri progetti, dopo l'aggiornamento di Magento alla versione 1.9.2.2.

##Istruzioni

* Aggiornare Magento alla versione 1.9.2.2 prima di installare il modulo
* In alternativa applicare la patch

Scaricare il repository ZIP e scompattarlo nella propria root di Magento

oppure

questo modulo è installabile attraverso *composer* aggiungendo le seguenti righe al proprio composer.json

    {
        "require":[
            ...
            "vmasciotta/magento-project-variables-installer":"1.0.0"
            ...
        ],
        "repositories":[
            ...
            {"type": "vcs", "url":"https://github.com/vmasciotta/magento-project-variables-installer"}
            ...
        ]
    }


Il modulo comprende, per comodità, già un file di aggiornamento dei dati, *data-upgrade-1.0.0-1.1.0.php.dist*, cancellare l'estensione .dist, aggiungere le variabili/blocchi neccessari e aggiornare la versione del file app/code/community/Vmasciotta/MagentoProjectVariablesInstaller/etc/config.xml

    <?xml version="1.0" ?>
    <config>
        <modules>
            <Vmasciotta_MagentoProjectVariablesInstaller>
                <version>1.1.0</version> <!-- cambia la versione, qui! - change your version here! --> 
            </Vmasciotta_MagentoProjectVariablesInstaller>
        </modules>

Un esempio è già nel file

    //add your blocks here
    $blocksList = [
        //['block_name'=>'page/html','is_allowed'=>1],
        //['block_name'=>'newsletter/subscribe','is_allowed'=>1],
    ];
    
    //add your variables here
    $variablesList = [
        //['variable_name'=>'','is_allowed'=>1],
        //['variable_name'=>'','is_allowed'=>1],
    ];
    
**ATTENZIONE**
Se una variabile o un blocco è già stata definita, tramite ad esempio una precedente installazione, o manualmente tramite l'admin di Magento, l'installazione fallirà!