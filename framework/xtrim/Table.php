<?
    namespace fret\xtrim;
 
    class Table extends _Container {

		private $_tagframe;
		private $_tagtable;
		
		private $_current_row_index = -1;
		private $_current_col_index = -1;

		private $_rows = array();
		private $_cells = array();
		private $_current_row = null;
		private $_current_cell = null;
		
		function tagFrame() {return $this->_tagframe; }
		function tagTable() {return $this->_tagtable; }
		
        static function _new( string $id ) : _Container {
			$o = new Table ($id, __CLASS__);

			$o->_tagframe = $o->tag("div");
			$o->_tagframe->setClass("fret-table-frame");
			$o->_tagframe->set("id",$id."Frame");

			$o->_tagtable = $o->tag("table");
			$o->_tagtable->setClass("fret-table");
			$o->_tagtable->set("id",$id);

			$o->_tagframe->add ( $o->_tagtable );
			
			$o->setRootTag( $o->tagFrame() );

			$o->setInnerTag( $o->tagFrame() );
  
			return $o;
        }

		function addRow( $id = "" ) : _Container {
			$this->_current_row_index++;
			if ($id == "") $id = $this->tagTable()->get("id")."Row".$this->_current_row_index;

			$this->_rows[$this->_current_row_index] = $this->tag("tr");
			$this->_rows[$this->_current_row_index] ->setClass("fret-table-row");
			$this->_rows[$this->_current_row_index] ->set("id",$id);
			$this->_cells[$this->_current_row_index] = array();
			$this->_current_col_index = -1;
			
			$this->tagTable()->add( $this->_rows[$this->_current_row_index] );
			
			$this->_current_row = $this->_rows[$this->_current_row_index];

			return $this;
		}

		function addCell( $id = "" , $header = false) : _Container {
			if ($this->_current_row_index < 0) return null;
			
			$this->_current_col_index++;
			if ($id == "") $id = $this->_current_row->get("id")."Cell".$this->_current_col_index;

			if ($header) {
				$this->_cells[$this->_current_row_index][$this->_current_col_index] = $this->tag("th");
				$this->_cells[$this->_current_row_index][$this->_current_col_index] ->setClass("fret-table-header");
			} else {
				$this->_cells[$this->_current_row_index][$this->_current_col_index] = $this->tag("td");
				$this->_cells[$this->_current_row_index][$this->_current_col_index] ->setClass("fret-table-cell");
			}
						
			$this->_cells[$this->_current_row_index][$this->_current_col_index]->set("id",$id);
			$this->_current_row->add( $this->_cells[$this->_current_row_index][$this->_current_col_index] );

			$this->_current_cell = $this->_cells[$this->_current_row_index][$this->_current_col_index];
			
			$this->setInnerTag( $this->_cells[$this->_current_row_index][$this->_current_col_index] );

			return $this;
		}
    }
?>