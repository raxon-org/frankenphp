{{$register = Package.Raxon.Frankenphp:Init:register()}}
{{if(!is.empty($register))}}
{{Package.Raxon.Frankenphp:Import:role.system()}}
{{Package.Raxon.Frankenphp:Main:frankenphp.install()}}
{{/if}}