<?php
$studentList = new \TUTOR\Students_List();
$studentList->prepare_items();
?>


<div class="wrap">
	<h2><?php esc_html_e( 'Students', 'tutor' ); ?></h2>

	<form id="students-filter" method="get">
		<input type="hidden" name="page" value="<?php echo esc_attr( \Tutor\Students_List::STUDENTS_LIST_PAGE ); ?>" />
		<?php
		$studentList->search_box( __( 'Search', 'tutor' ), 'students' );
		$studentList->display(); ?>
	</form>
</div>