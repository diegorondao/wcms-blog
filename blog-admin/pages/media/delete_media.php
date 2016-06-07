<?php

$media_id = _get('media_id');

if ( $media_id ) {
	$upload_data = blog_db_select('uploads', ['*'], ['ID' => $media_id])[0];

	if ( blog_db_delete('uploads', ['ID' => $media_id] ) ) {
		@unlink( BLOG_UPLOAD_DIR . '/' . $upload_data->upload_file_name);
		redirect( 'media', [ 'successMsg' => 'Mídia removido com sucesso'] );
	} else {
		redirect( 'media', [ 'errorMsg' => 'Problema na remoção'] );
	}

}
