  
  <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>

  
  <script>
      let existingImages = [];
      CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
              toolbar: {
                  items: [
                      // 'findAndReplace', 
                      'selectAll', '|',
                      'heading', '|',
                      'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                      'removeFormat', '|',
                      'bulletedList', 'numberedList', 'todoList', '|',
                      'outdent', 'indent', '|',
                      'undo', 'redo',
                      '|',
                      'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                      'alignment', '|',
                       'uploadImage', 'blockQuote', 'codeBlock' ,'link'
                
                      // 'textPartLanguage', '|',
                      // 'sourceEditing'
                  ],
                  shouldNotGroupWhenFull: true
              },

              list: {
                  properties: {
                      styles: true,
                      startIndex: true,
                      reversed: true
                  }
              },
              heading: {
                  options: [{
                          model: 'paragraph',
                          title: 'Paragraph',
                          class: 'ck-heading_paragraph'
                      },
                      {
                          model: 'heading1',
                          view: 'h1',
                          title: 'Heading 1',
                          class: 'ck-heading_heading1'
                      },
                      {
                          model: 'heading2',
                          view: 'h2',
                          title: 'Heading 2',
                          class: 'ck-heading_heading2'
                      },
                      {
                          model: 'heading3',
                          view: 'h3',
                          title: 'Heading 3',
                          class: 'ck-heading_heading3'
                      },
                      {
                          model: 'heading4',
                          view: 'h4',
                          title: 'Heading 4',
                          class: 'ck-heading_heading4'
                      },
                      {
                          model: 'heading5',
                          view: 'h5',
                          title: 'Heading 5',
                          class: 'ck-heading_heading5'
                      },
                      {
                          model: 'heading6',
                          view: 'h6',
                          title: 'Heading 6',
                          class: 'ck-heading_heading6'
                      }
                  ]
              },
              fontFamily: {
                  options: [
                      'default',
                      'Arial, Helvetica, sans-serif',
                      'Courier New, Courier, monospace',
                      'Georgia, serif',
                      'Lucida Sans Unicode, Lucida Grande, sans-serif',
                      'Tahoma, Geneva, sans-serif',
                      'Times New Roman, Times, serif',
                      'Trebuchet MS, Helvetica, sans-serif',
                      'Verdana, Geneva, sans-serif'
                  ],
                  supportAllValues: true
              },
              fontSize: {
                  options: [10, 12, 14, 'default', 18, 20, 22],
                  supportAllValues: true
              },
              htmlSupport: {
                  allow: [{
                      name: /.*/,
                      attributes: true,
                      classes: true,
                      styles: true
                  }]
              },
              htmlEmbed: {
                  showPreviews: true
              },
              link: {
                  decorators: {
                      addTargetToExternalLinks: true,
                      defaultProtocol: 'https://',
                      toggleDownloadable: {
                          mode: 'manual',
                          label: 'Downloadable',
                          attributes: {
                              download: 'file'
                          }
                      }
                  }
              },
              mention: {
                  feeds: [{
                      marker: '@',
                      feed: [
                          '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                          '@chocolate', '@cookie', '@cotton', '@cream',
                          '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                          '@gummi', '@ice', '@jelly-o',
                          '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                          '@sesame', '@snaps', '@soufflé',
                          '@sugar', '@sweet', '@topping', '@wafer'
                      ],
                      minimumCharacters: 1
                  }]
              },

              removePlugins: [
                  'AIAssistant',
                  'CKBox',
                  'CKFinder',
                  'EasyImage',
                  'RealTimeCollaborativeComments',
                  'RealTimeCollaborativeTrackChanges',
                  'RealTimeCollaborativeRevisionHistory',
                  'PresenceList',
                  'Comments',
                  'TrackChanges',
                  'TrackChangesData',
                  'RevisionHistory',
                  'Pagination',
                  'WProofreader',
                  'MathType',
                  'SlashCommand',
                  'Template',
                  'DocumentOutline',
                  'FormatPainter',
                  'TableOfContents',
                  'PasteFromOfficeEnhanced'
              ],
              ckfinder: {
                  uploadUrl: '<?php echo e(route('imageUpload') . '?_token=' . csrf_token()); ?>',
              },

          })
          .then(editor => {
              
              const initialContent = editor.getData();
              existingImages = getImageSources(initialContent);

              editor.model.document.on('change:data', () => {
                  const newContent = editor.getData();
                  const newImages = getImageSources(newContent);
                  const removedImages = existingImages.filter(src => !newImages.includes(src));

                  if (removedImages.length > 0) {
                      removedImages.forEach(src => deleteImageFromServer(src));
                  }

                  existingImages = newImages;
              });
          })
          .catch(error => {
              console.error(error);
          });


          function getImageSources(content) {
              const parser = new DOMParser();
              const doc = parser.parseFromString(content, 'text/html');
              return Array.from(doc.getElementsByTagName('img')).map(img => img.src);
          }

          function deleteImageFromServer(imageUrl) {
              fetch('<?php echo e(route('imageRemove')); ?>', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                      'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                  },
                  body: JSON.stringify({ url: imageUrl })
              })
              .then(response => response.json())
              .then(data => {
                  if (data.success) {
                      console.log('Image deleted successfully.');
                  } else {
                      console.error('Failed to delete image:', data.message);
                  }
              })
              .catch(error => {
                  console.error('Error:', error);
              });
          }
  </script><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/admin/layout/helper/ck-editor-script.blade.php ENDPATH**/ ?>