var studentModule = function() {
                studentApiMethod =  'StudentApi';
                return {
                    createStudents: function() {
                       
                    
                        jQuery.post(studentApiUrl).always(function(data) {
                            console.log(data);
                        });
                    },
                    getStudent: function(id) {
                        var data = {
                            ctrl: studentApiMethod
                        };
                        if (id)
                            data.id = id;

                        jQuery.ajax({
                            url:'back/api/api.php',
                            data: {activitiesArray : data},
                            type: 'GET',
                            success: function(result) {
                            
                                callback(result);
                            }
                        });
                    }
                }
            }
         function callback(result){
           let request =JSON.parse(result); 

           $('#Students').html("");
         
       $.ajax('front/viewTemplates/studentTemplate.html').always(function(studentTemplate){
           for(let i=0;i<request.length;i++){
               var s = studentTemplate;
               const num= 'student'+request[i].Student_id;//element id

               s = s.replace("{{studentid}}",request[i].student_id);
               s = s.replace("{{imgsrc}}","images/" + request[i].student_image);
               s = s.replace("{{studentName}}",request[i].student_name);
               s = s.replace("{{studentPhone}}",request[i].student_phone);

     $('#Students').append(s);        
           }
       })
         };           

      function sendImagetoServer(data,calltype){
          $.ajax({
              dataType:'text',//what to expect back from PHP script, if anything
              url:'back/api/api.php',// point to image upload file in server
              cache: false,
              cotentType:false,
              processData: false,
              data: data,
              type: 'POST',
              success: function(){}

          });
      }               


















































































































