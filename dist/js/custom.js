$(function(){
	$("#insertform").validate({
		rules:{
			dateactuelle:{
				required:true,
				date :true
			},
			societe:{
				required:true
			},
			agencemaritime:{
				required:true
			},
			numberbl:{
				required:true,
				digits: true
			},
			numberco:{
				required:true,
				digits: true
			},
			datereceptionbl:
			{
				required:true,
				date :true
			},
			datearriveeco:{
				required:true,
				date :true
			},
			redaac:{
				required:true
			},
			ddljaac:{
				required:true,
				date :true
			},
			ddscpl4jada:{
				required:true,
				date :true
			},
			ddsr:{
				required:true,
				date :true
			},
			jdpddsrmddsn:{
				required:true,
				digits: true
			},
			ddrc:{
				required:true,
				date :true
			},
			drdrc:{
				required:true,
				date :true
			},
			jdpddrcrmddrn:{
				required:true,
				digits: true
			},
			tdc:{
				required:true
			},
			poids:{
				required:true,
				digits: true
			},
			nombredecolis:{
				required:true,
				digits: true
			},
			nam:{
				required:true
			},
			cdt:{
				required:true,
				digits: true
			},
			ndc:{
				required:true
			},
			plaque:{
				required:true
			},
			telephone:{
				required:true,
				digits: true
			},
			joiql:{
				required:true
			},
			jaal:{
				required:true
			},
			jourdepotag:{
				required:true
			},
			arpo:{
				required:true
			},
			arpv:{
				required:true
			},
			arps:{
				required:true
			},
			arpa1sdna:{
				required:true
			},
			sdna:{
				required:true
			},
			aak:{
				required:true,
				date :true
			},
			ddk:{
				required:true,
				date :true
			},
			aal:{
				required:true,
				date :true
			},
			rcei:{
				required:true
			},
			cdlenf:{
				required:true
			},
			cdda:{
				required:true,
				digits: true
			},
			cdpl:{
				required:true,
				digits: true
			},
			cdtl:{
				required:true,
				digits: true
			},
			autresdepenses:{
				required:true
			},
			coutdetransport:{
				required:true,
				digits: true
			},
			cdpdt:{
				required:true,
				digits: true
			},
			coutdefumigation:{
				required:true,
				digits: true
			},
			cdpf:{
				required:true,
				digits: true
			},
			cdsf:{
				required:true,
				digits: true
			},
			cdf:{
				required:true
			},
			immigrationdgm:{
				required:true
			},
			feri:{
				required:true
			},
			douane:
			{
				required:true
			},
			numeroedouane:
			{
				required:true
			},
			bulletin:
			{
				required:true
			},
			occlabo:
			{
				required:true
			},
			redressementocc:{
				required:true
			},
			cautionco:{
				required:true
			},
			peagelufu:{
				required:true
			},
			peagenoki:{
				required:true
			},
			peagekenge:{
				required:true
			},
			peagekasangulu:{
				required:true
			},
			assurance:{
				required:true
			},
			feuillederoute:{
				required:true
			},
			mitendi:{
				required:true
			},
			antifraude:{
				required:true
			},
			douaneville:{
				required:true
			},
			bdlf:{
				required:true
			},
			pontpese:{
				required:true
			},
			caution1:{
				required:true
			},
			caution2:{
				required:true
			},
			// factureclient:{
			// 	required:true,
			// 	accept: "pdf/*"
			// },
			remboursementlient:{
				required:true,
			},
			avancesurfacture:{
				required: true,
				digits: true
			},
			soldesurfacture:{
				required:true,
				digits: true
			},
			margesociete:{
				required:true,
				digits: true
			}
		},
		// messages:{
		// 	dateactuelle:{
		// 		required: "this feild is required",
		// 		date: "Please enter date only"
		// 	}
		// },
		submitHandler: function(form) {
    		form.submit();
    	}
	});
});
