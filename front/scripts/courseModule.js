var courseModule = function() {
                courseApiMethod =  'CourseApi';
                return {
                    createCourses: function() {
                       
                    
                        jQuery.post(courseApiUrl).always(function(data) {
                            console.log(data);
                        });
                    },
                    getStudent: function(id) {
                        var data = {
                            ctrl: courseApiMethod
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

           $('#Courses').html("");
         //put total amount of courses here
           //$('#total')  
       $.ajax('front/viewTemplates/courseTemplate.html').always(function(courseTemplate){
           for(let i=0;i<request.length;i++){
               var c = courseTemplate;
               const num= 'course'+request[i].Course_id;//element id

               c = c.replace("{{courseid}}",request[i].course_id);
               c = c.replace("{{imgsrc}}","/School/images/" + request[i].course_image);
               c = c.replace("{{courseName}}",request[i].course_name);
               c = c.replace("{{courseDescription}}",request[i].course_description);

     $('#Courses').append(c);        
           }
       })
         };           

      function sendImagetoServer(data,calltype){
          $.ajax({
              dataType:'text',//what to expect back from PHP script, if anything
              url:'/School/back/api/api.php',// point to image upload file in server
              cache: false,
              cotentType:false,
              processData: false,
              data: data,
              type: 'POST',
              success: function(){}

          });
      }               