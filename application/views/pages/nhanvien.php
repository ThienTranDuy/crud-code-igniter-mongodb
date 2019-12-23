<div class="panel panel-default">
	<div class="panel-heading">
		Thêm nhân viên
	</div>
	<div class="panel-body" style="display: block;">


		<?php echo validation_errors(); ?>
		<?php echo form_open('nhanvien/data_submitted'); ?>

			<fieldset>
				<div class="row">
					<div class="col-md-6">
						<!-- Name input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Name</label>
							<div class="col-md-9">
								<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Email input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="email">Your E-mail</label>
							<div class="col-md-9">
								<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
							</div>
						</div>
					</div>
				</div>
			
				<!-- Form actions -->
				<div class="form-group">
					<div class="col-md-12 widget-right">
						<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
					</div>
				</div>
			</fieldset>
		</form>


	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Danh sách nhân viên
	</div>

	<div class="panel-body" style="display: block;">
		<table class="table">
			<thead>
				<tr> <th>#</th> <th>Họ và tên</th> <th>Email</th> <th> Công cụ</th> </tr> 
			</thead>
			<tbody>


				<?php foreach ($nhanvien as $item) {?>
				<tr> 
					<th scope="row"><?= $item['_id'] ?></th> <td><?= $item['user_name'] ?></td> <td><?= $item['user_mail'] ?></td>
					<td>
						<a href="#">
							<em class="fa fa-cogs" style="margin-right: 1rem"></em>
						</a>
						<?php echo form_open('nhanvien/data_destroy'); ?>
							<input type="hidden" name="user_id" value="<?= $item['_id'] ?>">
							<button type="submit" class="btn btn-default btn-md"><em class="fa fa-trash"></em></td></button>
						</form>
				</tr>
				<?php }; ?>


			</tbody>
		</table>
	</div>
</div>
