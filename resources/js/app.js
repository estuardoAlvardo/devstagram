import Dropzone from "dropzone";


Dropzone.autoDiscover = false;


const  dropzone =  new Dropzone('#dropzone',{
	dictDefaultMessage: 'Sube tu imagen aqui',
	acceptedFile: '.png,.jpg,jpeg,.gif',
	addRemoveLinks:true,
	dictRemoveFile: 'Borrar imagen',
	maxFiles:1,
	uploadMultiple: false,
})


dropzone.on('sending', function(file,xhr, formData){

	console.log(file);
})


dropzone.on('success', function(file, response){

	console.log(response);
})

dropzone.on('error', function(file, message){

	console.log(message);
})




